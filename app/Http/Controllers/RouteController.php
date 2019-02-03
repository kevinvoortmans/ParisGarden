<?php

namespace App\Http\Controllers;

use App\Page;
use App\Template;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class RouteController extends Controller
{

    public function router(Request $request)
    {
        $locale = LaravelLocalization::getCurrentLocale();

        $uri = $request->getRequestUri();

        $searchUri = str_replace('/'.$locale,'',$uri);

        if (substr($searchUri, 0,1) !== '/') {
            $searchUri = '/' . $searchUri;
        }

        $page = Page::where('url->'.$locale,$searchUri)->first();
        if (!$page) {
            $page = Page::where('url->'.$locale, substr($searchUri, 1))->first();
        }
        if (!$page) {
            abort(404);
        }

        $template = Template::find($page->template_id);

        if (!$template) {
            $template = Template::find(1);
        }

        $path =  'App\\Http\\Controllers\\' . $template->controller;
        $controller = new $path;
        $view = $controller->index();

        return $view
            ->with('page', $page)
            ->with('pageTitle', $page->name)
            ->with('seo', $page->getSeo());
    }
}