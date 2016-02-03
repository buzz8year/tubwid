namespace yii\tubular;

use Yii;
use yii\base\Widget;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;

class Tubular extends Widget
{

	public $selector = '.utube_wrapper';
	public $youtubecode;

	public function init()
	{
		parent::init();

		if ( empty($this->youtubecode)) {
			throw new InvalidConfigException('Id видео отсутствует');
		}
	}
	/**
	 * @see \yii\base\Widget::run()
	 */
	public function run()
	{
		$this->registerClientScript();
	}

	public function registerClientScript()
	{
		$js=  '$("'.$this->selector.'")';
		$js.= '.tubular({videoId: \'' . $this->youtubecode .'\'});';

		$view = $this->getView();
		TubularAsset::register($view);
		$view->registerJs($js);
	}

}
