namespace frontend\widgets\yii2_js_widget\assets;

use yii\web\AssetBundle;

class SimpleWidgetAsset extends AssetBundle
{
	public $sourcePath = '@frontend/widgets/yii2_js_widget';
	
	// NOTE: Any prerequisite AssetBundle your widget might need
	public $depends = [
		// 'yii\web\JqueryAsset'
	];
	
	public $css = [
		// 'css/your-style.css',
	];
	
	public $js = [
		'js/your-script.js',
	];
}
