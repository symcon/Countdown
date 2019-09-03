<?php

declare(strict_types=1);
class Countdown extends IPSModule
{
    public function Create()
    {
        //Never delete this line!
        parent::Create();

        //Properties
        $this->RegisterPropertyString('DateTime', '{"year":2019,"month":12,"day":24,"hour":0,"minute":0,"second":0}');
        $this->RegisterPropertyString('Event', $this->Translate('Christmas'));

        //Timer
        $this->RegisterTimer('UpdateCounter', 0, 'CD_UpdateCountdown($_IPS[\'TARGET\']);');

        //Variables
        $this->RegisterVariableString('Display', $this->Translate('Time Remaining'));
        $this->RegisterVariableBoolean('EventReached', $this->Translate('Event Reached'), '', false);
    }

    public function Destroy()
    {
        //Never delete this line!
        parent::Destroy();
    }

    public function ApplyChanges()
    {
        //Never delete this line!
        parent::ApplyChanges();
        $this->UpdateCountdown();
    }

    public function UpdateCountdown()
    {
        $time = json_decode($this->ReadPropertyString('DateTime'), true);
        $event = $this->ReadPropertyString('Event');

        //Getting difference between dates
        $format = '%d-%d-%d %d:%d:%d';
        $now = new DateTime();
        $eventDate = new DateTime(sprintf($format, $time['year'], $time['month'], $time['day'], $time['hour'], $time['minute'], $time['second']));
        $difference = $eventDate->diff($now);
        $differenceSeconds = $eventDate->getTimestamp() - $now->getTimestamp();

        //Seting display and event reached to corresponding values
        if ($differenceSeconds <= 0) {
            SetValue($this->GetIDForIdent('Display'), $this->Translate("It's ") . $event . '.');
            $this->SetTimerInterval('UpdateCounter', 0);
            SetValue($this->GetIDForIdent('EventReached'), true);
        } else {
            $timeRemaining = $difference->format($this->Translate('There are %a days, %h hours and %i minutes left'));
            $format = $this->Translate('%s until %s.');
            SetValue($this->GetIDForIdent('Display'), sprintf($format, $timeRemaining, $event));
            $this->SetTimerInterval('UpdateCounter', 60 * 1000);
            SetValue($this->GetIDForIdent('EventReached'), false);
        }
    }
}