<?php class System
{
    private $page;
    private $title = "DramaForever";

    public function __construct ()
    {
        if ($_SERVER['REQUEST_URI'] !== "/") $this->page = $_SERVER['REQUEST_URI'];

        if (!is_null($this->page)) {
            $this->page = explode('/', $this->page);
            $extract = array_shift($this->page);
            $load = "load" .ucfirst($this->page[0]);
        }

        if (is_null($this->page)) $load = "loadIndex";

        return $this->$load();
    }

    private function render ($pageToRender, $variables = [])
    {
        ob_start();
            extract($variables);
        $datas = ob_end_clean();

        require_once 'pages/' .$pageToRender. '.php';
        require_once 'pages/template.php';
    }

    private function setTitle ($text)
    {
        $newText = $this->title. ': ' .ucfirst($text);
        
        return $newText;
    }

    private function loadIndex ()
    {
        $title = $this->setTitle("accueil");

        return $this->render('index', compact('title'));
    }

    private function loadEvents ()
    {
        $title = $this->setTitle("nos actions");

        return $this->render('events', compact('title'));
    }

    private function loadTeam ()
    {
        $title = $this->setTitle("contributeurs");

        return $this->render('team', compact('title'));
    }
}