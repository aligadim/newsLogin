<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\News;
use Exception;
use Illuminate\Http\Request;
use App\Repository\NewsRepository;

class AddNewsController extends Controller
{
    protected $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function index()
    {
        $news = News::all();

        return view('admin.page.news.news',compact('news'));
    }

    public function create()
    {
        return view('admin.page.news.crud.creeate');
    }

    public function store(Request $request)
    {
        try{
            $data = $request->all();

            if($request->hasFile('image')){
                $data['foto'] = $request->file('image')->store('news','public');
            }
            $news = News::create($data);
        }catch (Exception $e) {
            throw $e;
        }
        return redirect()->route('admin.dashboard')->with('message','melumat ugurla elave edildi');
    }

    public function edit($id)
    {
        $item = News::findOrFail($id);
        return view('admin.page.news.crud.edit',compact('item'));
    }

    public function update(Request $request, int $id)
    {
        try{
            $data = $request->all();

            if($request->hasFile('image')){
            $data['foto'] = $request->file('image')->store('news','public');
            }


            $news = $this->newsRepository->update($id,$data);
        } catch (Exception $e) {
            throw $e;
        }
        return redirect()->route('admin.dashboard')->with('message','melumat ugurla yenilendi');

    }


    public function delete($id)
    {
        return $this->newsRepository->delete($id);
    }
}
