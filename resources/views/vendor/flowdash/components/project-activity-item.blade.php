@php
$time = $time ?? "12:30 PM";
$title = $title ?? "#4813 - Fix email alignment on iPhone 7";
$badge_label = $badge_label ?? "NEW";
$badge_class = $badge_class ?? "badge-light-gray";
$started_by = $started_by ?? "Michael S.";
$tag = $tag ?? "DEPLOYED";
$assigned = $assigned ?? "Bryan Davis";
$assigned_image = $assigned_image ?? "vendor/flowdash/images/256_joao-silas-636453-unsplash.jpg";
@endphp

<div class="row align-items-center projects-item mb-1">
  <div class="col-sm-auto mb-1 mb-sm-0">
    <div class="text-dark-gray">{{ $time }}</div>
  </div>
  <div class="col-sm">
    <div class="card m-0">
      <div class="px-4 py-3">
        <div class="row align-items-center">
          <div class="col" style="min-width: 300px">
            <div class="d-flex align-items-center">
              <a href="#" class="text-body"><strong class="text-15pt mr-2">{{ $title }}</strong></a>
              <span class="badge {{ $badge_class }}">{{ $badge_label }}</span>
            </div>
            <div class="d-flex align-items-center">
              <small class="text-dark-gray mr-2">Assigned to</small>
              <a href="#" class="d-flex align-items-middle">
                <span class="avatar avatar-xxs avatar-online mr-2">
                  <img src="{{ asset($assigned_image) }}" alt="Avatar" class="avatar-img rounded-circle">
                </span>
                {{ $assigned }}
              </a>
            </div>
          </div>
          <div class="col-auto d-flex align-items-center">
            <i class="material-icons icon-muted icon-20pt mr-2">account_circle</i>
            <a href="#" class="text-body">{{ $started_by }}</a>
          </div>
          <div class="col-auto d-flex align-items-center" style="min-width: 140px;">
            <a href="#" class="text-dark-gray">{{ $tag }}</a>
            <i class="material-icons icon-muted icon-20pt ml-2">folder</i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>