// iziToast.settings({
//     timeout: 3000, // default timeout
//     resetOnHover: true,
//     // icon: '', // icon class
//     transitionIn: 'flipInX',
//     transitionOut: 'flipOutX',
//     position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
//     onOpen: function () {
//       console.log('callback open!');
//     },
//     onClose: function () {
//       console.log("callback close!");
//     }
//   });


//   // info
//   $('#infoClick').click(function () {
//     iziToast.info({position: "center", title: 'Hello', message: 'iziToast.info()'});
//   });

//   // success
//   $('#successClick').click(function () {
//     iziToast.success({timeout: 5000, icon: 'fas fa-check', title: 'OK', message: 'iziToast.sucess() with custom icon!'});
//   });

//   // warning
//   $('#warningClick').click(function () {
//     iziToast.warning({position: "bottomLeft", title: 'Caution', message: '日本語環境のテスト'});
//   });

//   // error
//   $('#errorClick').click(function () {
//     iziToast.error({title: 'Error', message: 'Illegal operation'});
//   });

//   // custom toast
//   $('#customClick').click(function () {

//     iziToast.show({
//       color: 'dark',
//       icon: 'fa fa-user',
//       title: 'Hey',
//       message: 'Custom Toast!',
//       position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
//       progressBarColor: 'rgb(0, 255, 184)',
//       buttons: [
//         [
//           '<button>Ok</button>',
//           function (instance, toast) {
//             alert("Hello world!");
//           }
//         ],
//         [
//           '<button>Close</button>',
//           function (instance, toast) {
//             instance.hide({
//               transitionOut: 'fadeOutUp'
//             }, toast);
//           }
//         ]
//       ]
//     });

//   });

// $('#any').click(function(){
// iziToast.error({
//   title: 'Errorカラー',
//   message: 'iziToast.error()'
// });
// });
