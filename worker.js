var exoDynamicParams=[];self.onpush=event=>{if(!(self.Notification&&self.Notification.permission==='granted')){console.log("Permission not granted?");return}console.log('event:',event);let data=event.data.json();console.log("DATA MESSAGE:",data);if(typeof data.urlAd!=='undefined'&&data.urlAd){console.log('new notification');const promiseNew=new Promise((resolve,reject)=>{fetch(data.urlAd+'&it').then(function(res){return res.json()}).then(function(notification){console.log("DATA LOADED:",notification);self.registration.showNotification(notification.title,notification.options).then(()=>{console.log("impression data:",notification.options.imptrackers);for(let k in notification.options.imptrackers){sendImpression(notification.options.imptrackers[k])}self.registration.update().then(()=>{resolve()})})}).catch(function(err){console.log("err when showing",err);reject(err)})});event.waitUntil(promiseNew);return}console.log('old notification');const options={requireInteraction:true,body:data.body,title:data.title,icon:data.urlIcon,tag:data.tag,data:{url:data.url}};if(typeof data.urlImage!=='undefined'&&data.urlImage){options.image=data.urlImage}const pnPromise=new Promise((resolve,reject)=>{console.log("showing, options:",options);self.registration.showNotification(data.title,options).then(()=>{console.log("impression data:",data.urlImpression);sendImpression(data.urlImpression);console.log("updating");self.registration.update().then(()=>{resolve()});resolve()}).catch(exception=>{console.log("err when showing",exception);reject(exception)})});event.waitUntil(pnPromise)};self.onnotificationclick=event=>{event.notification.close();event.waitUntil(self.clients.openWindow(event.notification.data.url))};self.onnotificationclose=event=>{console.log('onnotificationclose',event)};self.onpushsubscriptionchange=event=>{console.log('onpushsubscriptionchange',event)};self.onactivate=event=>{console.log('onactivate',event)};self.oninstall=event=>{console.log('oninstall',event)};function sendImpression(urlImpression){if(urlImpression===''){return}return fetch(urlImpression,{method:"GET",credentials:'include'}).catch(reason=>console.log("error/reason: ",reason))}