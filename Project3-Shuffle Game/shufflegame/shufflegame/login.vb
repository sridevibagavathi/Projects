Imports System.Data.OleDb
Public Class login
    Dim con As New OleDbConnection
    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        TextBox1.Text = ""
        MaskedTextBox1.Text = ""
    End Sub
    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        If TextBox1.Text = "" Or MaskedTextBox1.Text = "" Then
            MsgBox("Invalid")
        ElseIf ask() = True Then
            MsgBox("Login")
            If MsgBoxResult.Ok Then
                Shuffle.Show()
                Me.Close()
            End If
        Else
            MsgBox("Invalid")
            TextBox1.Text = ""
            MaskedTextBox1.Text = ""
        End If

    End Sub
    Public Function ask()
        Dim dt As New DataTable
        Dim ds As New DataSet
        ds.Tables.Add(dt)
        con.Open()
        Dim da As New OleDbDataAdapter("select * from Table1", con)
        da.Fill(dt)
        For Each DataRow In dt.Rows
            If MaskedTextBox1.Text = DataRow.item(4) And TextBox1.Text = DataRow.item(0) Then
                con.Close()
                Return True
            End If
        Next
        con.Close()
        Return False
    End Function
    Private Sub login_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        con.ConnectionString = "Provider=microsoft.Ace.OLEDB.12.0;data source=C:\Users\ADMIN\documents\reg.accdb"
    End Sub

    Private Sub RadioButton1_CheckedChanged(ByVal sender As System.Object, ByVal e As System.EventArgs)

    End Sub
End Class


