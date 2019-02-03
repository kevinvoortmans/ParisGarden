<?php

namespace Exception\SettingsTool\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SettingsToolController extends Controller
{
    /** @var string */
    protected $settingsPath;

    public function __construct(string $settingsPath = null)
    {
        $this->settingsPath = $settingsPath ?? storage_path(config('settings.path', 'app/settings.json'));
    }

    public function read(Request $request)
    {
        $settings = settings()->all();

        $settingConfig = config('settings.panels');

        foreach ($settingConfig as $objectKey => $object) {
            $object['name'] = __($object['name']);
            foreach ($object['settings'] as $settingObjectKey => $settingObject) {
                $settingObject['name'] = __($settingObject['name']);
                $settingObject['description'] = __($settingObject['description']);
                if (! array_key_exists($settingObject['key'], $settings)) {
                    $settings[$settingObject['key']] = $settingObject['type'] == 'toggle' ? false : '';
                }
                $object['settings'][$settingObjectKey] = $settingObject;
            }
            $settingConfig[$objectKey] = $object;
        }



        return response()->json([
            'settings' => $settings,
            'settingConfig' => $settingConfig,
        ]);
    }

    public function write(Request $request)
    {
        $settings = settings();

        foreach ($request->settings as $setting => $value) {
            $settings->put($setting, $value);
        }

        return response($settings->all(), 202);
    }
}
