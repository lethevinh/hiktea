class EditorHtml {
    name: 'Editor Webaseline Site';
    version: '0.0.1';
    body: any;
    navbar: any;
    header: any;
    footer: any;
    configs: any;
    vendors: string[] = [];
    isLogin: boolean = false;
    defaults: any = {
        googleApiKey: null,
        googleAnalyticsKey: null,
        reCaptchaSiteKey: null,
        reCaptchaLanguage: null,
        disableAOSonMobile: true,
        smoothScroll: false,
        googleAnalyticsId: null
    };

    constructor() {

    }

    init() {
        // Check authendicator
        if (this.isLogin) {
            // code...
        }
        // Render UI editor
        // Loading commponent
        //$('p,h1,h2,h3,span,a,strong').attr('contenteditable', 'true');
        // Register component action for editor
        // Fire Event
    }
}

var editor = new EditorHtml();

declare var window: any;

window.hEditor = editor;

export { EditorHtml, editor };