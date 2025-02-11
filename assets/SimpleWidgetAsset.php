namespace frontend\widgets\yii2_js_widget\assets;

use yii\web\AssetBundle;

class SimpleWidgetAsset extends AssetBundle
{
	// NOTE: Any prerequisite AssetBundle your widget might need
	public $depends = [
		// 'yii\web\JqueryAsset'
	];
	
	public function init()
	{
		$this->sourcePath = __DIR__ . '/assets';
		$this->js = 'your-script.js';

		return parent::init();
	}
}
