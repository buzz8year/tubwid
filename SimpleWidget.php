namespace frontend\widgets\yii2-js-widget;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

class SimpleWidget extends Widget
{
	public function init()
	{
		parent::init();
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

		// NOTE: This registers all js/css resources defined within your AssetBundle
		SimpleWidgetAsset::register($view);

		// NOTE: Additional scripts
		$js = 'let smth = 0; your_js_function(); console.log(smth);';
		$view->registerJs($js);
	}

}
