({69129:function(){window.addEventListener("DOMContentLoaded",(()=>{$("#loglevel").change((function(){$.post(OC.generateUrl("/settings/admin/log/level"),{level:$(this).val()},(()=>{OC.Log.reload()}))})),$("#mail_smtpauth").change((function(){this.checked?$("#mail_credentials").removeClass("hidden"):$("#mail_credentials").addClass("hidden")})),$("#mail_smtpmode").change((function(){"smtp"!==$(this).val()?($("#setting_smtpauth").addClass("hidden"),$("#setting_smtphost").addClass("hidden"),$("#mail_smtpsecure_label").addClass("hidden"),$("#mail_smtpsecure").addClass("hidden"),$("#mail_credentials").addClass("hidden"),$("#mail_sendmailmode_label, #mail_sendmailmode").removeClass("hidden")):($("#setting_smtpauth").removeClass("hidden"),$("#setting_smtphost").removeClass("hidden"),$("#mail_smtpsecure_label").removeClass("hidden"),$("#mail_smtpsecure").removeClass("hidden"),$("#mail_smtpauth").is(":checked")&&$("#mail_credentials").removeClass("hidden"),$("#mail_sendmailmode_label, #mail_sendmailmode").addClass("hidden"))}));const e=function(){OC.PasswordConfirmation.requiresPasswordConfirmation()?OC.PasswordConfirmation.requirePasswordConfirmation(e):(OC.msg.startSaving("#mail_settings_msg"),$.ajax({url:OC.generateUrl("/settings/admin/mailsettings"),type:"POST",data:$("#mail_general_settings_form").serialize(),success:()=>{OC.msg.finishedSuccess("#mail_settings_msg",t("settings","Saved"))},error:e=>{OC.msg.finishedError("#mail_settings_msg",e.responseJSON)}}))},s=function(){OC.PasswordConfirmation.requiresPasswordConfirmation()?OC.PasswordConfirmation.requirePasswordConfirmation(s):(OC.msg.startSaving("#mail_settings_msg"),$.ajax({url:OC.generateUrl("/settings/admin/mailsettings/credentials"),type:"POST",data:$("#mail_credentials_settings").serialize(),success:()=>{OC.msg.finishedSuccess("#mail_settings_msg",t("settings","Saved"))},error:e=>{OC.msg.finishedError("#mail_settings_msg",e.responseJSON)}}))};$("#mail_general_settings_form").change(e),$("#mail_credentials_settings_submit").click(s),$("#mail_smtppassword").click((()=>{"text"===this.N&&"********"===this.U&&(this.N="password",this.U="")})),$("#sendtestemail").click((e=>{e.preventDefault(),OC.msg.startAction("#sendtestmail_msg",t("settings","Sending…")),$.ajax({url:OC.generateUrl("/settings/admin/mailtest"),type:"POST",success:()=>{OC.msg.finishedSuccess("#sendtestmail_msg",t("settings","Email sent"))},error:e=>{OC.msg.finishedError("#sendtestmail_msg",e.responseJSON)}})})),null!==document.getElementById("security-warning")&&$.when(OC.SetupChecks.checkSetup()).then((e=>{const s=$("#postsetupchecks");$("#security-warning-state-loading").addClass("hidden");let i=!1;const t=s.find(".errors"),n=s.find(".warnings"),a=s.find(".info");for(let s=0;s<e.length;s++)switch(e[s].type){case OC.SetupChecks.MESSAGE_TYPE_INFO:a.append("<li>"+e[s].msg+"</li>");break;case OC.SetupChecks.MESSAGE_TYPE_WARNING:n.append("<li>"+e[s].msg+"</li>");break;case OC.SetupChecks.MESSAGE_TYPE_ERROR:default:t.append("<li>"+e[s].msg+"</li>")}t.find("li").length>0&&(t.removeClass("hidden"),i=!0),n.find("li").length>0&&(n.removeClass("hidden"),i=!0),a.find("li").length>0&&(a.removeClass("hidden"),i=!0),i?($("#postsetupchecks-hint").removeClass("hidden"),t.find("li").length>0?$("#security-warning-state-failure").removeClass("hidden"):$("#security-warning-state-warning").removeClass("hidden")):0===$("#security-warning").children("ul").children().length?$("#security-warning-state-ok").removeClass("hidden"):$("#security-warning-state-failure").removeClass("hidden")}))}))}})[69129]();
//# sourceMappingURL=settings-legacy-admin.js.map?v=ca105fbc8876df6a7aad