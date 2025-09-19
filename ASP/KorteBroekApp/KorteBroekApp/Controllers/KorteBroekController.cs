using Microsoft.AspNetCore.Mvc;

namespace KorteBroekApp.Controllers
{
    public class KorteBroekController : Controller
    {
        public IActionResult Index()
        {
            ViewData["Title"] = "Kan ik vandaag een korte broek aan?";
            return View();
        }

        public IActionResult Weer()
        {
            // Voorbeeld data (later kan dit via een API)
            var model = new
            {
                Temperature = 28,
                RainChance = 20,
                ImageUrl = "/images/sun.png",
                Answer = "Ja! Vandaag is het korte broeken weer "
            };

            ViewData["Title"] = "Weer";
            return View(model);
        }
    }
}
