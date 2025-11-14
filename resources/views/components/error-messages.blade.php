<div style="color:red">
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @if ($loop->iteration >= 2)
                    @break
                @endif
            @endforeach
            @if ($has2MoreErrors)
                ...以下略
            @endif
        </ul>
    </div>
</div>