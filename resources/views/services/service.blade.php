<div class="service-container">
    <div class="service-user">
        <h1 class="service-user-name">
            <a href="/services/{{ $service->id }}" >
                {{ $service->title }}
            </a>
        </h1>
        <p>
            {{ $service->created_at->toFormattedDateString() }}
        </p>
    </div>
    <div class="service-all-services">
        <ul>
            <li>
                TESTER
            </li>
            <li>
                TESTER
            </li>
            <li>
                TESTER
            </li>
        </ul>
    </div>
    <div class="service-type">
        <p>
            {{ $service->service_type }}
        </p>
    </div>
    <div class="service-prices">
        <p>
            {{ $service->service_price }}
        </p>
    </div>
</div>