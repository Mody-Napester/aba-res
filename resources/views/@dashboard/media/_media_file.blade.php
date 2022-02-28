@if($resource->media_type->name == 'image')
    <img src="{{ url('assets_public/files/image') . '/' . $resource->file_name }}" alt="image" class="img-thumbnail">
@elseif($resource->media_type->name == 'video')
    <video width="150" height="100" controls>
        <source src="{{ url('assets_public/files/video') . '/' . $resource->file_name }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
@elseif($resource->media_type->name == 'book')
    <a href="{{ url('assets_public/files/book') . '/' . $resource->file_name }}"><i class="bx bx-download"></i></a>
@elseif($resource->media_type->name == 'text')
    <a href="{{ url('assets_public/files/text') . '/' . $resource->file_name }}"><i class="bx bx-download"></i></a>
@endif
