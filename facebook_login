window.fbAsyncInit = function() {
      FB.init({
        appId      : '645769065485335',
        status     : true, 
        cookie     : true, 
        xfbml      : true
      });
    FB.login(function(){}, {scope: 'publish_actions'});
    FB.Event.subscribe('auth.authResponseChange', function(response) {
        if (response.status === 'connected') {
            testAPI();
        } else if (response.status === 'not_authorized') {
            FB.login(function(){
                FB.api('/me/feed', 'post', {message: 'Hello, world!'});
            }, {scope: 'publish_actions'});
        } else {
            FB.login(function(){
            FB.api('/me/feed', 'post', {message: 'Hello, world!'});
            }, {scope: 'publish_actions'});
        } console.log(FB.getAuthResponse());  
    });
};

function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
    });
}
