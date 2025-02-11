namespace yii\tubular;

use Yii;
use yii\base\Widget;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;

class Tubular extends Widget
{
	public function init()
	{
		parent::init();

		if (empty($this->youtubecode)) {
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
		$view = $this->getView();
		TubularAsset::register($view);

		$js = 'let smth = 0; your_js_function(); console.log(smth);';
		$view->registerJs($js);
	}

}
