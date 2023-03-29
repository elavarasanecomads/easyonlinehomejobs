<!-- Google Tag Manager -->
<script>
(function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-WK7QPD5');
</script>
<!-- End Google Tag Manager -->


<script type="text/javascript" src="https://api.elasticsendy.com/api/sigfm_prm/mp.js"></script>


<!-- BEGIN ElasticSendy Signup Form -->
<!-- START - We recommend to place the below code in head tag of your website html  -->
<style type="text/css">
.mpx_error {
    color: red !important;
}
</style>

<script type="text/javascript">
function mpx_submitSignupForm(event) {
    event.preventDefault();
    let formEle = event.target;
    // disable submit button to prevent more than one click.
    document.getElementById("mpx_submit_btn").disabled = true; // clear all the previous request error messages.
    let allErrorElements = document.getElementsByClassName("mpx_error");
    [].forEach.call(allErrorElements, (element) => {
        element.innerHTML = "";
    });
    // submit the form.
    fetch(formEle.action, {
        method: formEle.method,
        redirect: 'follow',
        mode: 'cors',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams(new FormData(formEle))
    }).
    then((response) => {
        if (!response.ok) {
            let redirectUrl = document.getElementById("mpx_onsubmit_redirect_url").value;
            if (redirectUrl.length > 1) {
                window.location = redirectUrl;
            }
        } else {
            response.json().then((json) => {
                // enable submit button.
                document.getElementById("mpx_submit_btn").disabled = false;
                if (json.error && json.error.message) {
                    document.getElementById("mpx_error_global").innerHTML = json.error.message;
                } else if (json.data && json.data.field_errors) {
                    Object.keys(json.data.field_errors).forEach((key, i) => {
                        document.getElementById("mpx_error_" + key).innerHTML = json.data
                            .field_errors[key];
                    })
                } else if (json.data && json.data.add_success) {
                    // hide the input elements container
                    document.getElementById("mpx_input_elmts_bx").style.visibility = "hidden";
                    document.getElementById("mpx_success_box").style.visibility = "visible";
                    if (json.data.add_success_message) {
                        document.getElementById("mpx_success_box").innerHTML = json.data
                            .add_success_message;
                    }
                    if (json.data.add_success_redirect_url) {
                        // redirect.
                        window.location = json.data.add_success_redirect_url;
                    }
                } else {
                    // not proper json returned from server.
                    let redirectUrl = document.getElementById("mpx_onsubmit_redirect_url").value;
                    if (redirectUrl.length > 1) {
                        window.location = redirectUrl;
                    }
                }
            })
        }
    }).catch(() => {

    })
}
</script>
<!-- END - We recommend to place the below code in head tag of your website html  -->


<!--<script type="text/javascript">
    window.pg=window.pg||[];pg.atq=pg.atq||[];
    pg.atq.push(function() {
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-2056519449225465",
            enable_page_level_ads: true,
        });
    });
</script>
<script src="//m2d.m2.ai/pg.simplyearnonline.js" async> </script>-->