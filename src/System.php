<?php class System
{
    private $page;

    public function __construct ()
    {
        if ($_SERVER['REQUEST_URI'] !== "/") $this->page = $_SERVER['REQUEST_URI'];

        if (is_null($this->page)) $this->page = "/index";

        if (!is_null($this->page)) {
            $this->page = explode('/', $this->page);
            $extract = array_shift($this->page);
            $load = "load" .ucfirst($this->page[0]);
        }

        return $this->$load();
    }

    private function render ($pageToRender, $variables = [])
    {
        $datasWebsite = static::getDatas('website');

        $website = [];
        $website['title'] = $datasWebsite['website']['foundation'];
        $website['version'] = $datasWebsite['system']['version'];
        $website['author'] = $datasWebsite['system']['author'];
        $website['authorLink'] = $datasWebsite['system']['contact'];

        $contact = [];
        $contact['phone'] = $datasWebsite['website']['phone'];
        $contact['email'] = $datasWebsite['website']['email'];
        $contact['insta'] = $datasWebsite['socials']['instagram'];
 
        ob_start();
            $website;
            $contact;
            extract($variables);
        $datas = ob_end_clean();

        require_once 'pages/' .$pageToRender. '.php';
        require_once 'pages/template.php';
    }

    //
    //
    // Pages

    private function loadIndex ()
    {
        $title = static::setTitle('accueil');
        $incomming = static::getEventsIcomming();

        return $this->render('index', compact('title', 'incomming'));
    }

    private function loadEvents ()
    {
        $title = static::setTitle('nos actions');
        $incomming = static::getEventsIcomming();

        $manifestations = static::getEvents('manifestations');
        $events = static::getEvents('events');
        $meetings = static::getEvents('meetings');
        
        return $this->render('events', compact('title', 'incomming', 'manifestations', 'events', 'meetings'));
    }

    private function loadTeam ()
    {
        $title = static::setTitle('contributeurs');
        $all = static::getDatas('team');

        $team = $all['team'];
        $queens = $all['queens'];

        return $this->render('team', compact('title', 'team', 'queens'));
    }

    private function loadUs ()
    {
        $title = static::setTitle("A propos");

        return $this->render('about', compact('title'));
    }

    private function loadDonation ()
    {
        $title = static::setTitle("Faire un don");

        return $this->render('donation', compact('title'));
    }

    //
    //
    // Statics

    private static function setTitle ($text)
    {
        $name = static::getDatas('website')['website']['foundation'];
        $newText = $name. ': ' .ucfirst($text);
        
        return $newText;
    }

    private static function getDatas ($link)
    {
        $url = getcwd(). '/src/datas/' .$link. '.json';
        $json = file_get_contents($url);
        $json = stripslashes($json);
        
        return json_decode($json, true);
    }

    private static function orderByDate ($a, $b)
    {
        $date1 = strtotime($a['date']);
        $date2 = strtotime($b['date']);

        if ($date1 < 0) return 0;

        return $date1 - $date2;
    }

    private static function getEventsIcomming ()
    {
        $loadEvents = static::getDatas('events');

        // All datas
        $manif = $loadEvents['manifestations'];
        $ev = $loadEvents['events'];
        $meet = $loadEvents['meetings'];

        $all = [];
        // All events reunited
        foreach ($manif as $data) {
            $all[] = $data;
        }
        foreach ($ev as $data) {
            $all[] = $data;
        }
        foreach ($meet as $data) {
            $all[] = $data;
        }

        usort($all, array('System', 'orderByDate'));

        $year = [];
        // From the neareast
        foreach ($all as $data) {
            $date = $data['date'];
            $actualY = explode('/', $date);
            $tostamp = strtotime($date);

            if ($actualY[2] !== 2022 && $tostamp >= time()) {
                $data['date'] = static::convertDate($date);
                $year[] = $data;
            }
        }

        return $year;
    }

    private static function getEvents ($name)
    {
        $getDatas = static::getDatas('events')[$name];

        usort($getDatas, array('System', 'orderByDate'));

        $datas = [];
        
        foreach ($getDatas as $data) {
            $data['date'] = static::convertDate($data['date']);
            if (isset($data['end']) && !is_null($data['end'])) $data['end'] = static::convertDate($data['end']);
            $datas[] = $data;
        }

        return array_reverse($datas);
    }

    private static function convertDate ($date)
    {
        $date = strtotime($date);
        return date('d/m/Y', $date);
    }
    
}