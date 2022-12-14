const scrollReveal = ScrollReveal({
    origin: "top",
    distance: "30px",
    duration: 700,
    reset: false,
  });
  
  scrollReveal.reveal(
    `
  .s-hero .title, 
  .s-success .tag ,
  .title-success,
  .cards,
  .card,
  .s-about,
  .about-me .my-picture,
  .s-cases,
  .title-cases,
  .cases,
  .case,
  .s-contact,
  .title-contact,
  .tag .form-contact`,
    { interval: 60 }
  );