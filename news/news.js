function date_display() {
   const weekday = [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
   ];
   const month_name = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
   ];
   const date = new Date();
   let day = weekday[date.getDay()];
   let month = month_name[date.getMonth()];
   document.getElementById("datetime").innerHTML =
      day.toLocaleString() +
      ", " +
      month.toLocaleString() +
      " " +
      date.getDate().toLocaleString();
}
