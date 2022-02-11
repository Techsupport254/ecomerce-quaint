function login(obj) {
  const ss = SpreadsheetApp.getActive();
  const sh = ss.getSheetByName('Login');
  const vs = sh.getRange(2,1,sh.getLastRow() - 1, 2).getValues();
  let robj = {loggedin:false};
  for(let i = 0;i<vs.length; i++) {
    if(vs[i][0] == obj.email && vs[i][1] == obj.password) {
      robj.loggedin = true;
      break;
    }
  }
  return robj;
}

function launchLogin() {
  const ui = SpreadsheetApp.getUi();
  ui.showModelessDialog(HtmlService.createHtmlOutputFromFile("ah1"),"Login Form");
}