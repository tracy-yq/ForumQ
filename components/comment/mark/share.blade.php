<span class="d-none" id="{{ $cid.'-url' }}">{{ $url }}</span>

<ul class="dropdown-menu" aria-labelledby="share">
    <li><span class="dropdown-item-text fw-bolder">{{ fs_lang('share') }}:</span></li>
    <li><a class="dropdown-item py-2" href="#" onclick="copyToClipboard('#{{ $cid.'-url' }}')"><i class="bi bi-link-45deg"></i> {{ fs_lang('copyLink') }}</a></li>
    {{-- <li><a class="dropdown-item py-2" href="#"><i class="bi bi-chat-dots-fill"></i> 微信好友</a></li> --}}
    {{-- <li><a class="dropdown-item py-2" href="#"><i class="bi bi-bullseye"></i> 微信朋友圈</a></li> --}}
    {{-- <li><a class="dropdown-item py-2" href="#"><i class="bi bi-image"></i> 生成分享图</a></li> --}}
</ul>
