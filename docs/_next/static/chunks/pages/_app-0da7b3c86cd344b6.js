(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[888],{6840:function(e,t,n){(window.__NEXT_P=window.__NEXT_P||[]).push(["/_app",function(){return n(2917)}])},1210:function(e,t){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.getDomainLocale=function(e,t,n,r){return!1};("function"===typeof t.default||"object"===typeof t.default&&null!==t.default)&&"undefined"===typeof t.default.__esModule&&(Object.defineProperty(t.default,"__esModule",{value:!0}),Object.assign(t.default,t),e.exports=t.default)},8418:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var r=n(4941).Z;n(5753).default;Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o=n(2648).Z,a=n(7273).Z,u=o(n(7294)),l=n(6273),c=n(2725),i=n(3462),f=n(1018),s=n(7190),d=n(1210),p=n(8684),v={};function y(e,t,n,r){if(e&&l.isLocalURL(t)){Promise.resolve(e.prefetch(t,n,r)).catch((function(e){0}));var o=r&&"undefined"!==typeof r.locale?r.locale:e&&e.locale;v[t+"%"+n+(o?"%"+o:"")]=!0}}var h=u.default.forwardRef((function(e,t){var n,o=e.href,h=e.as,x=e.children,b=e.prefetch,m=e.passHref,g=e.replace,j=e.shallow,_=e.scroll,C=e.locale,w=e.onClick,O=e.onMouseEnter,M=e.onTouchStart,P=e.legacyBehavior,L=void 0===P?!0!==Boolean(!1):P,E=a(e,["href","as","children","prefetch","passHref","replace","shallow","scroll","locale","onClick","onMouseEnter","onTouchStart","legacyBehavior"]);n=x,!L||"string"!==typeof n&&"number"!==typeof n||(n=u.default.createElement("a",null,n));var R=!1!==b,N=u.default.useContext(i.RouterContext),k=u.default.useContext(f.AppRouterContext);k&&(N=k);var T,S=u.default.useMemo((function(){var e=r(l.resolveHref(N,o,!0),2),t=e[0],n=e[1];return{href:t,as:h?l.resolveHref(N,h):n||t}}),[N,o,h]),I=S.href,Z=S.as,U=u.default.useRef(I),A=u.default.useRef(Z);L&&(T=u.default.Children.only(n));var B=L?T&&"object"===typeof T&&T.ref:t,D=r(s.useIntersection({rootMargin:"200px"}),3),H=D[0],K=D[1],G=D[2],X=u.default.useCallback((function(e){A.current===Z&&U.current===I||(G(),A.current=Z,U.current=I),H(e),B&&("function"===typeof B?B(e):"object"===typeof B&&(B.current=e))}),[Z,B,I,G,H]);u.default.useEffect((function(){var e=K&&R&&l.isLocalURL(I),t="undefined"!==typeof C?C:N&&N.locale,n=v[I+"%"+Z+(t?"%"+t:"")];e&&!n&&y(N,I,Z,{locale:t})}),[Z,I,K,C,R,N]);var q={ref:X,onClick:function(e){L||"function"!==typeof w||w(e),L&&T.props&&"function"===typeof T.props.onClick&&T.props.onClick(e),e.defaultPrevented||function(e,t,n,r,o,a,c,i,f,s){if("A"!==e.currentTarget.nodeName.toUpperCase()||!function(e){var t=e.currentTarget.target;return t&&"_self"!==t||e.metaKey||e.ctrlKey||e.shiftKey||e.altKey||e.nativeEvent&&2===e.nativeEvent.which}(e)&&l.isLocalURL(n)){e.preventDefault();var d=function(){"beforePopState"in t?t[o?"replace":"push"](n,r,{shallow:a,locale:i,scroll:c}):t[o?"replace":"push"](n,{forceOptimisticNavigation:!s})};f?u.default.startTransition(d):d()}}(e,N,I,Z,g,j,_,C,Boolean(k),R)},onMouseEnter:function(e){L||"function"!==typeof O||O(e),L&&T.props&&"function"===typeof T.props.onMouseEnter&&T.props.onMouseEnter(e),!R&&k||l.isLocalURL(I)&&y(N,I,Z,{priority:!0})},onTouchStart:function(e){L||"function"!==typeof M||M(e),L&&T.props&&"function"===typeof T.props.onTouchStart&&T.props.onTouchStart(e),!R&&k||l.isLocalURL(I)&&y(N,I,Z,{priority:!0})}};if(!L||m||"a"===T.type&&!("href"in T.props)){var z="undefined"!==typeof C?C:N&&N.locale,F=N&&N.isLocaleDomain&&d.getDomainLocale(Z,z,N.locales,N.domainLocales);q.href=F||p.addBasePath(c.addLocale(Z,z,N&&N.defaultLocale))}return L?u.default.cloneElement(T,q):u.default.createElement("a",Object.assign({},E,q),n)}));t.default=h,("function"===typeof t.default||"object"===typeof t.default&&null!==t.default)&&"undefined"===typeof t.default.__esModule&&(Object.defineProperty(t.default,"__esModule",{value:!0}),Object.assign(t.default,t),e.exports=t.default)},7190:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var r=n(4941).Z;Object.defineProperty(t,"__esModule",{value:!0}),t.useIntersection=function(e){var t=e.rootRef,n=e.rootMargin,i=e.disabled||!u,f=r(o.useState(!1),2),s=f[0],d=f[1],p=r(o.useState(null),2),v=p[0],y=p[1];o.useEffect((function(){if(u){if(i||s)return;if(v&&v.tagName){var e=function(e,t,n){var r=function(e){var t,n={root:e.root||null,margin:e.rootMargin||""},r=c.find((function(e){return e.root===n.root&&e.margin===n.margin}));if(r&&(t=l.get(r)))return t;var o=new Map,a=new IntersectionObserver((function(e){e.forEach((function(e){var t=o.get(e.target),n=e.isIntersecting||e.intersectionRatio>0;t&&n&&t(n)}))}),e);return t={id:n,observer:a,elements:o},c.push(n),l.set(n,t),t}(n),o=r.id,a=r.observer,u=r.elements;return u.set(e,t),a.observe(e),function(){if(u.delete(e),a.unobserve(e),0===u.size){a.disconnect(),l.delete(o);var t=c.findIndex((function(e){return e.root===o.root&&e.margin===o.margin}));t>-1&&c.splice(t,1)}}}(v,(function(e){return e&&d(e)}),{root:null==t?void 0:t.current,rootMargin:n});return e}}else if(!s){var r=a.requestIdleCallback((function(){return d(!0)}));return function(){return a.cancelIdleCallback(r)}}}),[v,i,n,t,s]);var h=o.useCallback((function(){d(!1)}),[]);return[y,s,h]};var o=n(7294),a=n(9311),u="function"===typeof IntersectionObserver,l=new Map,c=[];("function"===typeof t.default||"object"===typeof t.default&&null!==t.default)&&"undefined"===typeof t.default.__esModule&&(Object.defineProperty(t.default,"__esModule",{value:!0}),Object.assign(t.default,t),e.exports=t.default)},1018:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.TemplateContext=t.GlobalLayoutRouterContext=t.LayoutRouterContext=t.AppRouterContext=void 0;var r=(0,n(2648).Z)(n(7294)),o=r.default.createContext(null);t.AppRouterContext=o;var a=r.default.createContext(null);t.LayoutRouterContext=a;var u=r.default.createContext(null);t.GlobalLayoutRouterContext=u;var l=r.default.createContext(null);t.TemplateContext=l},2917:function(e,t,n){"use strict";n.r(t),n.d(t,{default:function(){return s}});var r=n(5893),o=n(1799),a=(n(7294),n(1664)),u=n.n(a),l=function(){return(0,r.jsx)("header",{className:"bg-gray-800 text-white",children:(0,r.jsx)("div",{className:"container mx-auto flex justify-center items-center py-4",children:(0,r.jsxs)("nav",{className:"flex items-center space-x-6",children:[(0,r.jsx)(u(),{href:"/",children:"Home"},0),(0,r.jsx)(u(),{href:"/blog/about",children:"About me"},0),(0,r.jsx)(u(),{href:"/contact",children:"Contact"},0)]})})})},c=function(){return(0,r.jsx)("footer",{className:"bg-gray-800 text-white",children:(0,r.jsx)("div",{className:"container mx-auto flex justify-center items-center py-4",children:(0,r.jsx)("p",{children:"\xa9 2023 MySite"})})})},i=function(e){var t=e.children;return(0,r.jsxs)(r.Fragment,{children:[(0,r.jsx)(l,{}),(0,r.jsx)("main",{className:"min-h-screen bg-gray-50 py-8 flex flex-col justify-center relative overflow-hidden lg:py-12",children:(0,r.jsx)("div",{className:"relative w-full px-6 bg-white shadow-xl shadow-slate-700/10 ring-1 ring-gray-900/5 md:max-w-3xl md:mx-auto lg:max-w-4xl lg:pb-28",children:t})}),(0,r.jsx)(c,{})]})};var f=function(e){var t=e.Component,n=e.pageProps;return(0,r.jsx)(i,{children:(0,r.jsx)(t,(0,o.Z)({},n))})};n(472);var s=function(e){var t=e.Component,n=e.pageProps,o=e.router;return(0,r.jsx)(f,{Component:t,pageProps:n,router:o})}},472:function(){},1664:function(e,t,n){e.exports=n(8418)},1799:function(e,t,n){"use strict";function r(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function o(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{},o=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(o=o.concat(Object.getOwnPropertySymbols(n).filter((function(e){return Object.getOwnPropertyDescriptor(n,e).enumerable})))),o.forEach((function(t){r(e,t,n[t])}))}return e}n.d(t,{Z:function(){return o}})}},function(e){var t=function(t){return e(e.s=t)};e.O(0,[774,179],(function(){return t(6840),t(387)}));var n=e.O();_N_E=n}]);