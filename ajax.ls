<script>
function search () {
  // (A) GET SEARCH TERM
  var data = new FormData(document.getElementById("form"));
  data.append("ajax", 1);

  // (B) AJAX SEARCH REQUEST
  fetch("searchUsers.php", { method:"POST", body:data })
  .then(res => res.json())
  .then(res => {
    var wrapper = document.getElementById("results");
    if (res.length > 0) {
      wrapper.innerHTML = "";
      for (let r of res) {
        let line = document.createElement("div");
        line.innerHTML = `${r["ID_Employee"]} - ${r["Update_Time"]}`;
        wrapper.appendChild(line);
      }
    } else { wrapper.innerHTML = "No results found"; }
  });
  return false;
}
</script>