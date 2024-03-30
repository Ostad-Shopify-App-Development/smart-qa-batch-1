var widget = document.getElementsByClassName('smartqa-widget')[0];

var sqa_iframe = `<iframe src="https://dear-workable-earwig.ngrok-free.app/widgets/general?shop=${Shopify.shop}" frameborder="0" width="100%" style="border: 0; height: 100vh;"></iframe>`;

widget.innerHTML = sqa_iframe;

