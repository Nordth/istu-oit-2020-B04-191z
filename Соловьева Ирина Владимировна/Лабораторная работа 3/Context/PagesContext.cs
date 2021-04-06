using Microsoft.AspNetCore.Identity.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore;
using SolovevaSite.Domain.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace SolovevaSite.Context
{
    public class PagesContext : DbContext
    {
        public DbSet<Page> Pages { get; set; }

        public PagesContext(DbContextOptions<PagesContext> options) : base(options)
        {
            Database.EnsureCreated();
        }
    }
}
