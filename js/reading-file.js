// --------------------- reading identifiler function ---------------------
function onRead() {
    let token = '9c90c28fda19fddf5f80376c4840d87f415d48b5'
    let identifier = document.form1.txtName1.value
    fetch(`https://resume-parser.affinda.com/public/api/v1/documents/${identifier}`,
      {
        method: 'GET',
        headers: {
          'Authorization': `Bearer ${token}`,
          'Accept': 'application/json',
          'Content-Type': 'application/json',
        },
      }).then(r => r.json()).then(r => console.log(r))
  }