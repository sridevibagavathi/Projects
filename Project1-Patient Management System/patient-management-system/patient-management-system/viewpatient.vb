
Imports System.Data.OleDb
Public Class viewpatient
    Dim con As New OleDbConnection
    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click

        Dim dt As New DataTable
        Dim ds As New DataSet
        ds.Tables.Add(dt)

        Dim da As New OleDbDataAdapter("select * from Table1 where [pid] ='" & TextBox1.Text & "'", con)
        con.Open()
        da.Fill(dt)
        For Each DataRow In dt.Rows
            viewpatientinform.Label1.Text = DataRow.item(0)
            viewpatientinform.Label2.Text = DataRow.item(1)
            viewpatientinform.Label3.Text = DataRow.item(2)
            viewpatientinform.Label4.Text = DataRow.item(4)
            viewpatientinform.Label5.Text = DataRow.item(5)
            viewpatientinform.Label11.Text = DataRow.item(8)
        Next


        con.Close()
        viewpatientinform.Show()
        Me.Close()


    End Sub
    

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        TextBox1.Clear()
    End Sub

    Private Sub viewpatient_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        con.ConnectionString = "Provider=Microsoft.ACE.OLEDB.12.0;Data Source=C:\Users\ADMIN\Documents\regpatient.accdb"
    End Sub
End Class