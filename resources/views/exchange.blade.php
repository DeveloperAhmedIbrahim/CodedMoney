@extends('layout')
@section('title', 'Exchange')

@section('content')
    <script>
        ! function() {
            if (window.PartnerExchangeWidget = window.PartnerExchangeWidget || {
                    open(e) {
                        window.partnerWidgetSettings = {
                            immediateOpen: e
                        }
                    }
                }, "PartnerExchangeWidget" !== window.PartnerExchangeWidget.constructor.name) {
                (() => {
                    const e = document.createElement("script");
                    e.type = "text/javascript", e.defer = !0, e.src = "https://widget.sandbox.paybis.com/partner-exchange-widget.js";
                    const t = document.getElementsByTagName("script")[0];
                    t.parentNode.insertBefore(e, t)
                })()
            }
        }();

        window.PartnerExchangeWidget.open({
            requestId: '2b5866b5-3f0f-46ad-acc6-11f971151715',
        });
    </script>


@endsection
