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

        async function widgetRequest() {
            try {
                const response = await fetch("{{ route('widgetRequest') }}", {
                    headers: {
                        'accept': 'application/json'
                    },
                    method: 'GET',
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }

                const result = await response.json();
                return result; // Return the parsed JSON data
            } catch (error) {
                console.error("Fetch error:", error.message);
                return null; // Return a fallback value on error
            }
        }

        // Call the function and handle the result
        widgetRequest().then(result => {
            console.log("Result:", result); // Works here
            window.PartnerExchangeWidget.open({
                requestId: result.data.requestId,
            });
        });

        // // OR: Use inside another async function
        // async function main() {
        //     const result = await widgetRequest();
        //     console.log("Result:", result.data.requestId);
        // }

        // main();


    </script>


@endsection
