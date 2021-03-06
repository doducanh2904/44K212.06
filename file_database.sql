USE [WEB_THU_VIEN]
GO
/****** Object:  Table [dbo].[DANH_MUC]    Script Date: 30/03/2021 5:02:52 CH ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DANH_MUC](
	[id_danhmuc] [char](5) NOT NULL,
	[Ten_danhmuc] [nvarchar](50) NOT NULL,
	[SoLuong_danhmuc] [int] NOT NULL,
	[MoTa_danhmuc] [nvarchar](50) NULL,
PRIMARY KEY CLUSTERED 
(
	[id_danhmuc] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DOC_GIA]    Script Date: 30/03/2021 5:02:52 CH ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DOC_GIA](
	[id_docgia] [int] NOT NULL,
	[Ten_docgia] [nvarchar](50) NOT NULL,
	[DonVi_docgia] [nvarchar](100) NOT NULL,
	[NgayLamThe_docgia] [datetime] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_docgia] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[MUON]    Script Date: 30/03/2021 5:02:52 CH ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[MUON](
	[id_sach] [int] NOT NULL,
	[id_docgia] [int] NOT NULL,
	[id_nhanvien] [int] NOT NULL,
	[NgayMuon_muon] [datetime] NOT NULL,
	[NgayTra_muon] [datetime] NOT NULL,
	[TinhTrang_muon] [nvarchar](50) NULL,
	[SoLuong_muon] [int] NOT NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[NHAN_VIEN]    Script Date: 30/03/2021 5:02:52 CH ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[NHAN_VIEN](
	[id_nhanvien] [int] NOT NULL,
	[TenNhanVien_nhanvien] [nvarchar](50) NOT NULL,
	[GioiTinh_nhanvien] [varchar](4) NULL,
	[NgaySinh_nhanvien] [datetime] NULL,
	[Sdt_nhanvien] [varchar](13) NULL,
	[DiaChi_nhanvien] [nvarchar](100) NULL,
PRIMARY KEY CLUSTERED 
(
	[id_nhanvien] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SACH]    Script Date: 30/03/2021 5:02:52 CH ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SACH](
	[id_sach] [int] NOT NULL,
	[Ten_sach] [nvarchar](50) NOT NULL,
	[id_danhmuc] [char](5) NOT NULL,
	[SoTrang_sach] [int] NULL,
	[TenTacGia_sach] [nvarchar](50) NOT NULL,
	[ThoiGianDuocMuon_sach] [int] NOT NULL,
	[NgayXuatBan_sach] [datetime] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_sach] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[MUON]  WITH CHECK ADD  CONSTRAINT [fk_DOCGIA] FOREIGN KEY([id_docgia])
REFERENCES [dbo].[DOC_GIA] ([id_docgia])
GO
ALTER TABLE [dbo].[MUON] CHECK CONSTRAINT [fk_DOCGIA]
GO
ALTER TABLE [dbo].[MUON]  WITH CHECK ADD  CONSTRAINT [fk_NHANVIEN] FOREIGN KEY([id_nhanvien])
REFERENCES [dbo].[NHAN_VIEN] ([id_nhanvien])
GO
ALTER TABLE [dbo].[MUON] CHECK CONSTRAINT [fk_NHANVIEN]
GO
ALTER TABLE [dbo].[MUON]  WITH CHECK ADD  CONSTRAINT [fk_SACH] FOREIGN KEY([id_sach])
REFERENCES [dbo].[SACH] ([id_sach])
GO
ALTER TABLE [dbo].[MUON] CHECK CONSTRAINT [fk_SACH]
GO
ALTER TABLE [dbo].[SACH]  WITH CHECK ADD  CONSTRAINT [fk_DANHMUC] FOREIGN KEY([id_danhmuc])
REFERENCES [dbo].[DANH_MUC] ([id_danhmuc])
GO
ALTER TABLE [dbo].[SACH] CHECK CONSTRAINT [fk_DANHMUC]
GO
