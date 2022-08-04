<x-app-layout title="Link User Show">
    <div class="row">
        <div class="col-12">
            <h2 class="content-title">Detail</h2>
            <h5 class="content-desc mb-3">Detail Link User</h5>
        </div>
    </div>

    <div class="card" style="width: 24rem;">
        <div class="card-header">
            1
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $linkUser['title'] }}</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia magni veritatis
                delectus.</p>
            <a href="#" class="card-link">{{ $linkUser['link_name'] }}</a>
        </div>
        <div class="card-footer text-muted">
            Created by {{ $linkUser['user']['name'] }}
        </div>
    </div>
</x-app-layout>
