<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exchange | Coded Money</title>
    <link rel="icon" href="{{ asset('assets/wp-content/uploads/2024/12/icon-SVG.svg') }}" sizes="32x32" />
	<link rel="icon" href="{{ asset('assets/wp-content/uploads/2024/12/icon-SVG.svg') }}" sizes="192x192" />
	<link rel="apple-touch-icon" href="{{ asset('assets/wp-content/uploads/2024/12/icon-SVG.svg') }}" />
</head>
<body>

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
                return result;
            } catch (error) {
                console.error("Fetch error:", error.message);
                return null;
            }
        }

        widgetRequest().then(result => {
            console.log("Result:", result);
            window.PartnerExchangeWidget.events.onclosed = function (e) {
                window.location.href = "{{ route('home') }}";
            };
            window.PartnerExchangeWidget.open({
                requestId: result.data.requestId,
            });
        });

    </script>

</body>
</html>
