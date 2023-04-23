<?php
require_once $conf->root_path.'/lib/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {
	private $msgs;   
	private $form;   
	private $result; 
	private $hide_intro; 

	
	public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}
	

	public function getParams(){
		$this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
		$this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
		$this->form->op = isset($_REQUEST ['z']) ? $_REQUEST ['z'] : null;
	}
	

	public function validate() {
		
		if (! (isset ( $this->form->x ) && isset ( $this->form->y ) && isset ( $this->form->z ))) {
			return false; 
		} else { 
			$this->hide_intro = true; //przyszły pola formularza, więc - schowaj wstęp
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->x == "") {
			$this->msgs->addError('Nie podano kwoty');
		}
		if ($this->form->y == "") {
			$this->msgs->addError('Nie podano lat');
		}
        if ($this->form->z == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->x )) {
				$this->msgs->addError('Kwota nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->y )) {
				$this->msgs->addError('Lata nie są liczbą całkowitą');
			}
            if (! is_numeric ( $this->form->z )) {
				$this->msgs->addError('Oprocentowanie nie jest liczbą całkowitą');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	public function process(){
		$this->getparams();	
		if ($this->validate()) {
				
			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
            $this->form->y = intval($this->form->z);
			$this->msgs->addInfo('Parametry poprawne.');
				
            $this->result->result = ($this->form->x/$this->form->y/12);
            $this->result->result = $this->result->result+$this->result->result*$this->form->z/100;
			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Przykład 05');
		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Obiekty w PHP');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/calc.tpl');
	}
}
