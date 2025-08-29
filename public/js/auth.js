
function checkAuth(){
  const auth = firebase.auth();
  auth.onAuthStateChanged(user=>{

    if(user){
        console.log(user);
        location.href='admin/index.html';
        
    }else{
        location.href='login.html';
    }
  });
}




function getCurrentUser(){
var theuser = "";
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
      theuser = user;
  }
});
return theuser;
}


function logOut(){
  var user = firebase.auth().currentUser;
  // alert(user.uid);
	   firebase.auth().signOut().then(function() {
        console.log('Signed Out');
      location.href='../index.html';
}, function(error) {
  console.error('Sign Out Error', error);
});


}





      // const countrySelectTag = document.getElementById('countrySelection');
      // const citySelectTag = document.getElementById('regionSelection');

      // // Get the data for the country select tag
      // database.ref('countries').on('value', (snapshot) => {
      //   const countries = snapshot.val();
      //     var keys = Object.keys(countries);

      //   // countrySelectTag.innerHTML = '<option value="">'+keys[0]+'</option>';
      //   Object.keys(countries).forEach((key) => {
      //     const option = document.createElement('option');
      //       option.value = key;
      //       option.innerText = key;
      //     countrySelectTag.appendChild(option);
      //   });
      // });

      // // Update the city select tag when the country select tag changes
      // countrySelectTag.addEventListener('change', (event) => {
      //   const selectedCountry = event.target.value;

      //   database.ref(`countries/${selectedCountry}/regions`).on('value', (snapshot) => {
      //     const cities = snapshot.val();
      //       var regionKeys = Object.keys(cities);

      //     citySelectTag.innerHTML = '';
      //     Object.keys(cities).forEach((key) => {
      //       const option = document.createElement('option');
      //       option.value = key;
      //       option.innerText = key;
      //       citySelectTag.appendChild(option);
      //     });
      //   });
      // });