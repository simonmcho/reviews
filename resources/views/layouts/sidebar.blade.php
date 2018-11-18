<div class="col-sm-3 offset-sm-1 service-sidebar">
    <div class="sidebar-module side-bar-module-inset">
        <h4>
            Test
        </h4>
    </div>

    <div class="sidebar-module">
        <h3>
            Archives
        </h3>
        <ol class="list-unstyled">
            @foreach ($archives as $stats)
                <li>
                    <a href="/services/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                        {{ $stats['month'].' '.$stats['year'] }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>
</div>