<?php
require_once $conf->root_path.'/app/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';



class CalcCtrl {

	private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
    public function getParams(){
		$this->form->ilosc = isset($_REQUEST ['ilosc']) ? $_REQUEST ['ilosc'] : null;
		$this->form->lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
		$this->form->oprocentowanie = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
	}
    
    /** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->ilosc ) && isset ( $this->form->lata ) && isset ( $this->form->oprocentowanie ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		} else { 
			$this->hide_intro = true; //przyszły pola formularza, więc - schowaj wstęp
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->ilosc == "") {
			$this->msgs->addError('Nie podano kwoty');
		}
		if ($this->form->lata == "") {
			$this->msgs->addError('Nie podano lat');
		}
        if ($this->form->oprocentowanie == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->ilosc )) {
				$this->msgs->addError('Podana ilość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->lata )) {
				$this->msgs->addError('Podane lata nie jest liczbą całkowitą');
			}
            if (! is_numeric ( $this->form->oprocentowanie )) {
				$this->msgs->addError('Podane oprocentowanie nie jest liczbą całkowitą');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->ilosc = intval($this->form->ilosc);
			$this->form->lata = intval($this->form->lata);
            $this->form->oprocentowanie = intval($this->form->oprocentowanie);
            
			$this->msgs->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
			$miesieczne_oprocentowanie = $this->form->oprocentowanie / 1200; //  dzielmy przez 1200 ponieważ potrzebujemy oprocentowania w  miesiącach
            $miesioce = $lata * 12;

            //operacja
            $this->result->result = $this->form->ilosc * ($miesieczne_oprocentowanie + ($miesieczne_oprocentowanie / (pow(1 + $miesieczne_oprocentowanie, $miesioce) - 1)));

			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		
	}
}
    
    
include $conf->root_path.'/app/calc_view.php';    
?>