const __vite__fileDeps=[OC.filePath('firstrunwizard', '', 'js/main-BugzTyYY.mjs'),OC.filePath('firstrunwizard', '', 'css/firstrunwizard-main.css')],__vite__mapDeps=i=>i.map(i=>__vite__fileDeps[i]);
/*! third party licenses: js/vendor.LICENSE.txt */
import{_ as i}from"./modulepreload-polyfill-DDskOgo1.mjs";document.addEventListener("DOMContentLoaded",function(){const o=document.querySelector("#firstrunwizard_about button"),t=()=>{document.querySelector("#firstrunwizard_about button").addEventListener("click",async function(e){var n;e.stopPropagation(),e.preventDefault();const r=(n=document.querySelector('[aria-controls="header-menu-user-menu"]'))!=null?n:void 0,{open:u}=await i(()=>import("./main-BugzTyYY.mjs"),__vite__mapDeps([0,1]),import.meta.url);u(r),OC.hideMenus(()=>!1)})};o?t():window._nc_event_bus.subscribe("core:user-menu:mounted",t)});
