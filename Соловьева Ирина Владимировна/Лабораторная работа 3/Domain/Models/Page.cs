namespace SolovevaSite.Domain.Models
{
  public class Page
  {
    public int Id { get; set; }
    public string Title { get; set; }

    public string Text { get; set; }

    public byte[] Image { get; set; }
  }
}