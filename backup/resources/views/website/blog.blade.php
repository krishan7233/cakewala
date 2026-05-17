@extends('website.website_app')
@section('content')

  <style>
 .blog-container {
    width: 100%;
    max-width: 1600px;
    margin-top: 190px;
    margin-bottom: 80px;
    padding: 0 40px;
}

    h1 {
      text-align: center;
      margin-bottom: 40px;
      font-size: 40px;
    }
.blog-card h3 {
    margin: 0 0 10px;
    font-size: 18px;
    color: #000;
}
    .blog-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .blog-card {
      background: #fff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
      border-radius: 10px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .blog-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .blog-card-content {
      padding: 15px;
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .blog-card h3 {
      margin: 0 0 10px;
      font-size: 18px;
    }

    .blog-card p {
      flex: 1;
      font-size: 14px;
      color: #555;
    }

    .read-more {
      background-color: #4a2d1f;
      color: white;
      border: none;
      padding: 10px 15px;
      font-size: 14px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
      width: fit-content;
    }

    .pagination {
      display: flex;
      justify-content: center;
      margin-top: 40px;
      gap: 10px;
    }

    .pagination button {
      padding: 8px 16px;
      border: none;
      background-color: #4a2d1f;
      color: white;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>

<style>
  .pagination-wrapper .pagination {
      justify-content: center;
  }
  .pagination-wrapper .page-item .page-link {
      color: #333;
      border-radius: 4px;
      margin: 0 3px;
  }
  .pagination-wrapper .page-item.active .page-link {
      background-color: #49a316;
      border-color: #49a316;
      color: #fff;
  }
  
  @media only screen and (max-width: 600px) {
  .blog-container {
    width: 100%;

    margin-top: 120px;
    margin-bottom: 80px;
    padding: 0 20px;
}
}

</style>
<div class="blog-container">
 
   @foreach($blogs as $blog)
  <div class="blog-card">
      <a
      href="{{ route('blog_detaills', [
                                        'blog_slug' => $blog->slug,
                                    ]) }}"
      >
    <img src="{{asset($blog->feature_image)}}">
    <div class="blog-card-content">
      <h3>{{$blog->name}}</h3>
      <p>{{$blog->meta_description}}.</p>
      <button class="read-more">Read more</button>
    </div>
    </a>
  </div>

@endforeach
<div class="pagination-wrapper" style="text-align: center; margin-top: 20px;">
  {{ $blogs->links('pagination::bootstrap-5') }}
</div>
</div>






@endsection