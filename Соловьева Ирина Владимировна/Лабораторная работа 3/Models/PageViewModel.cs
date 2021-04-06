using Microsoft.AspNetCore.Http;
using SolovevaSite.Domain.Models;
using System.IO;

namespace SolovevaSite.Models
{
    public class PageViewModel
    {
        public int Id { get; set; }
        public string Title { get; set; }

        public string Text { get; set; }

        public IFormFile Image { get; set; }

        public PageViewModel(Page page)
        {
            Id = Id;
            Title = page.Title;
            Text = page.Text;
        }

        public static PageViewModel CreatePoorPageViewModel(Page page)
        {
            return new PageViewModel()
            {
                Id = page.Id,
                Title = page.Title,
                Text = page.Text
            };
        }

        public static Page CreatePage(PageViewModel pvm)
        {
            var imageBytes = new byte[] { };

            if (pvm.Image != null)
            {
                using (var ms = new MemoryStream())
                {
                    pvm.Image.CopyTo(ms);
                    imageBytes = ms.ToArray();
                }
            }

            var page = new Page()
            {
                Text = pvm.Text,
                Title = pvm.Title,
                Image = imageBytes
            };

            return page;
        }

        public PageViewModel()
        {

        }
    }
}