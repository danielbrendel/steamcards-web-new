<?php

/**
 * API controller
 */
class ApiController extends BaseController {
    /**
     * Construct object
     * 
     * @return void
     */
	public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
    }

    /**
     * Query Steam game/app data
     * 
     * @param Asatru\Controller\ControllerArg $request
     * @return Asatru\View\JsonHandler
     */
    public function queryAppInfo($request)
    {
        try {
            $appid = $request->params()->query('appid', null);
            $language = $request->params()->query('lang', 'english');

            $data = SteamApp::querySteamData($appid, $language);

            return json(array('code' => 200, 'appid' => $appid, 'lang' => $language, 'data' => $data));
        } catch (\Exception $e) {
            return json(array('code' => 500, 'msg' => $e->getMessage()));
        }
    }

    /**
     * Query Steam server data
     * 
     * @param Asatru\Controller\ControllerArg $request
     * @return Asatru\View\JsonHandler
     */
    public function queryServerInfo($request)
    {
        try {
            $addr = $request->params()->query('addr', null);

            $data = SteamServer::querySteamData(env('STEAM_API_KEY'), $addr);

            return json(array('code' => 200, 'addr' => $addr, 'data' => $data));
        } catch (\Exception $e) {
            return json(array('code' => 500, 'msg' => $e->getMessage()));
        }
    }

    /**
     * Query Steam user data
     * 
     * @param Asatru\Controller\ControllerArg $request
     * @return Asatru\View\JsonHandler
     */
    public function queryUserInfo($request)
    {
        try {
            $steamid = $request->params()->query('steamid', null);

            $data = SteamUser::querySteamData(env('STEAM_API_KEY'), $steamid);

            return json(array('code' => 200, 'steamid' => $steamid, 'data' => $data));
        } catch (\Exception $e) {
            return json(array('code' => 500, 'msg' => $e->getMessage()));
        }
    }

    /**
     * Query JavaScript or CSS resource for component
     * 
     * @param Asatru\Controller\ControllerArg $request
     * @return mixed
     */
    public function queryResource($request)
    {
        $res = $request->params()->query('type');
        $module = $request->params()->query('module');
        $ver = $request->params()->query('version', 'v1');

        if ($res === 'js') {
            if (file_exists(public_path('/js/steamcards/' . $ver . '/steam_' . $module . '.js'))) {
                return redirect(asset('js/steamcards/' . $ver . '/steam_' . $module . '.js'));
            } else {
                http_response_code(404);
                exit();
            }
        } else if ($res === 'css') {
            if (file_exists(public_path('/css/steamcards/' . $ver . '/steam_' . $module . '.css'))) {
                return redirect(asset('css/steamcards/' . $ver . '/steam_' . $module . '.css'));
            } else {
                http_response_code(404);
                exit();
            }
        }
    }
}
