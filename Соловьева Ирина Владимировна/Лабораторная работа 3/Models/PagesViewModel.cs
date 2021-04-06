using Microsoft.AspNetCore.Mvc.RazorPages;
using System.Collections.Generic;
using System.Linq;

namespace SolovevaSite.Models
{
    public class PagesViewModel
    {
        public List<PageViewModel> Pages { get; set; } = new List<PageViewModel>();

        public PagesViewModel(IEnumerable<PageViewModel> pages)
        {
            Pages = pages.ToList();
        }

        public PagesViewModel()
        {

        }

    }
}