// --------------------- token to using API Affinda ---------------------
let token = '9c90c28fda19fddf5f80376c4840d87f415d48b5'
// --------------------- onchange file-name ---------------------
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

var id = "";
var x;

// --------------------- upload function ---------------------
function onUpload () 
{
  const fileInput = document.querySelector('input') ;
  const formData = new FormData()
  formData.append('file', fileInput.files[0]);
  fetch('https://resume-parser.affinda.com/public/api/v1/documents/', 
  {
      method: 'POST',
      headers: 
      {
        'Authorization': `Bearer ${token}`,
        'Accept': 'application/json',
      },
      body: formData,
    }).then(r => r.json()).then(r => console.log(r))
}

