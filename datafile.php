<?PHP
class Datafile{
	private $arquivo;

	public function __construct(){

	}

	public function setArquivo($datafile){
		$this->arquivo = $datafile;
	}

	public function getArquivo($datafile){
		return $this->arquivo;
	}

	public function readContent($filepath){
		$this->setArquivo(file_get_contents($filepath));
	}

	public function showContent(){
		echo $this->getArquivo();
	}
}
?>