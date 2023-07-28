<?php

namespace App\Mail;

use DateTimeZone;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use Spatie\CalendarLinks\Link;
use DateTime;

class EventEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The User instance.
     *
     * @var User
     */
    private $user;

    /**
     * The Event name.
     *
     * @param string
     */
    private $event;
    private $start_date;
    private $end_date;
    private $start_time;
    private $end_time;
    private $location;
    private $description;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, string $event, string $start_date, string $end_date, string $start_time, ?string $end_time, string $location, ?string $description)
    {
        $this->user        = $user;
        $this->event       = $event;
        $this->start_date  = $start_date;
        $this->end_date    = $end_date;
        $this->start_time  = $start_time;
        $this->end_time    = $end_time;
        $this->location    = $location;
        $this->description = $description;
    }

    public function build(){
        $email = $this->subject('EVENT REGISTRATION CONFIRMATION')->view('emails.event_confirmation')
                      ->with([
                            'user'                => $this->user, 
                            'event'               => $this->event,
                            'start_date'          => $this->start_date,
                            'end_date'            => $this->end_date,
                            'start_time'          => $this->start_time,
                            'location'            => $this->location,
                            'description'         => $this->description,
                            'googleCalendarLink'  => $this->generateGoogleCalendarLink(),
                            'yahooCalendarLink'   => $this->generateYahooCalendarLink(),
                            'outlookCalendarLink' => $this->generateOutlookCalendarLink(),
                            'humanReadableDate'   => $this->humanReadableDate(), 
                       ]);
                       
        return $email;
    }

    private function humanReadableDate(){
        $date              = new DateTime($this->start_date);
        $humanReadableDate = $date->format('F d, Y');
        return $humanReadableDate;
    }
    
    private function generateGoogleCalendarLink()
    {
        $startDate = date('Ymd', strtotime($this->start_date));
        $endDate   = date('Ymd', strtotime($this->end_date));

        $googleCalendarUrl  = "https://www.google.com/calendar/render?action=TEMPLATE";
        $googleCalendarUrl .= "&text="     . urlencode($this->event);
        $googleCalendarUrl .= "&dates="    . urlencode($startDate . "/" . $endDate);
        $googleCalendarUrl .= "&details="  . urlencode("Event: " . $this->event . "\nLocation: " . $this->location);
        $googleCalendarUrl .= "&location=" . urlencode($this->location);
        $googleCalendarUrl .= "&sprop=&sprop=name:";

        return $googleCalendarUrl;
    }

    private function generateOutlookCalendarLink()
    {
        $startDate = date('Ymd', strtotime($this->start_date));
        $endDate   = date('Ymd', strtotime($this->end_date));

        $outlookCalendarUrl  = 'https://outlook.live.com/calendar/0/deeplink/compose/';
        $outlookCalendarUrl .= "&subject="  . urlencode($this->event);
        $outlookCalendarUrl .= "&startdt="  . urlencode($startDate); // Assuming time is in 'H:i' format
        $outlookCalendarUrl .= "&enddt="    . urlencode($endDate); // Assuming time is in 'H:i' format
        $outlookCalendarUrl .= "&location=" . urlencode($this->location);

        return $outlookCalendarUrl;
    }


    private function generateYahooCalendarLink()
    {
        $dateTimeFormat = 'Ymd';
        $url = 'https://calendar.yahoo.com/?v=60&view=d&type=20';
        $utcStartDateTime = (new DateTime($this->start_date))->setTimezone(new DateTimeZone('UTC'));
        $utcEndDateTime   = (new DateTime($this->end_date)  )->setTimezone(new DateTimeZone('UTC'));
        $url .= '&ST='    . urlencode($utcStartDateTime->format($dateTimeFormat));
        $url .= '&ET='    . urlencode($utcEndDateTime->format($dateTimeFormat));
        $url .= '&TITLE=' . urlencode($this->event);
    
        if ($this->description) {
            $url .= '&DESC=' . urlencode($this->description);
        }
    
        if ($this->location) {
            $url .= '&in_loc=' . urlencode($this->location);
        }
    
        return $url;
    }

}
