<aside id="cookies-policy" class="cookies cookies--no-js" data-text="{{ json_encode(__('cookieConsent::cookies.details')) }}">
    <div class="cookies__alert">
        <div class="lcc-bar">
            <p class="lcc-bar__text">
                Vi bruker kun nødvendige informasjonskapsler for å holde nettsiden i gang.
                @if($policy)
                    <a href="{{ $policy }}">Les mer.</a>
                @endif
            </p>
            @cookieconsentbutton(action: 'accept.essentials', label: 'OK', attributes: ['class' => 'lcc-ok'])
        </div>
    </div>
</aside>

<script data-cookie-consent>
    {!! file_get_contents(LCC_ROOT . '/dist/script.js') !!}
</script>

<style data-cookie-consent>
    {!! file_get_contents(LCC_ROOT . '/dist/style.css') !!}

    .cookies__alert { all: unset; display: block; }
    .cookies * { box-sizing: border-box; }

    .lcc-bar {
        position: fixed;
        bottom: 0; left: 0; right: 0;
        z-index: 9999;
        background: #0f172a;
        border-top: 1px solid #1e293b;
        padding: 0.875rem 1.5rem;
        display: flex;
        align-items: center;
        gap: 1.5rem;
    }
    .lcc-bar__text {
        flex: 1;
        font-size: 0.8125rem;
        color: #64748b;
        margin: 0;
    }
    .lcc-bar__text a {
        color: #94a3b8;
        text-decoration: underline;
    }
    .lcc-ok > form > button {
        padding: 0.4rem 1.1rem;
        border-radius: 0.5rem;
        font-size: 0.8125rem;
        font-weight: 600;
        cursor: pointer;
        background: #ef4444;
        color: #fff;
        border: none;
        transition: background 0.15s;
        white-space: nowrap;
    }
    .lcc-ok > form > button:hover { background: #dc2626; }
</style>
