const items = document.querySelectorAll(".accordion a");
 
function toggleAccordion(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}
 
items.forEach(item => item.addEventListener('click', toggleAccordion));

$(function() {
    $("[data-scroll]").on("click", function(event){
               
        event.preventDefault();
        
        let elementId = $(this).data("scroll");
        let elementOffset = $(elementId).offset().top;
        
        $("html, body").animate({
            scrollTop: elementOffset
        });
        
    })
    
});