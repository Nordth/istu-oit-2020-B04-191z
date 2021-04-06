using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using SolovevaSite.Context;
using SolovevaSite.Domain.Models;
using SolovevaSite.Models;
using Page = SolovevaSite.Domain.Models.Page;

namespace SolovevaSite.Controllers
{
    public class PageController : Controller
    {
        private PagesContext PagesContext { get; }

        // GET: PageController
        public ActionResult Index()
        {
            var dbPages = PagesContext.Pages;
            var pages = dbPages.Select(x => PageViewModel.CreatePoorPageViewModel(x));

            var pagesViewModel = new PagesViewModel(pages);

            return View(pagesViewModel);
        }

        public ActionResult Page(int id)
        {
            var page = PagesContext.Pages.FirstOrDefault(p => p.Id == id);

            if (page == null)
                return NotFound();

            return View(page);
        }

        public ActionResult Add()
        {
            return View();
        }

        [HttpPost]
        public ActionResult Add(PageViewModel pageViewModel)
        {
            try
            {
                var page = PageViewModel.CreatePage(pageViewModel);
                PagesContext.Add(page);
                PagesContext.SaveChanges();

                return RedirectToAction(nameof(Page), new { id = page.Id });
            }
            catch
            {
                return RedirectToAction(nameof(Index));
            }
        }

        public PageController(PagesContext context)
        {
            PagesContext = context;
        }
    }
}
