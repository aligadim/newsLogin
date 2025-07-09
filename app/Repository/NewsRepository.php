<?php
namespace App\Repository;
use App\Models\Admin\News;
use GuzzleHttp\Psr7\Request;

class NewsRepository
{
   public function update(int $id,array $data)
   {
    $news = News::findOrFail($id);
    return $news -> update($data);
   }

   public function delete($id)
   {
    $news = News::fainOrFail($id);
    return $news->delete();
   }
}
